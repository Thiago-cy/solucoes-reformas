Add-Type -AssemblyName System.Windows.Forms, System.Drawing

$laragonRoot = "C:\laragon"
$apacheExe   = "$laragonRoot\bin\apache\httpd-2.4.66-260223-Win64-VS18\bin\httpd.exe"
$apacheConf  = "$laragonRoot\bin\apache\httpd-2.4.66-260223-Win64-VS18\conf\httpd.conf"
$mysqlExe    = "$laragonRoot\bin\mysql\mysql-8.4.3-winx64\bin\mysqld.exe"
$mysqlConf   = "$laragonRoot\bin\mysql\mysql-8.4.3-winx64\my.ini"
$ngrokExe    = "$laragonRoot\bin\ngrok\ngrok.exe"

# ── 1. Inicia Apache ──────────────────────────────────────────────────────────
if (-not (Get-Process -Name "httpd" -ErrorAction SilentlyContinue)) {
    Start-Process $apacheExe -ArgumentList "-f `"$apacheConf`"" -WindowStyle Hidden
    Start-Sleep -Seconds 3
}

# ── 2. Inicia MySQL ───────────────────────────────────────────────────────────
if (-not (Get-Process -Name "mysqld" -ErrorAction SilentlyContinue)) {
    Start-Process $mysqlExe -ArgumentList "--defaults-file=`"$mysqlConf`"" -WindowStyle Hidden
    Start-Sleep -Seconds 4
}

# ── 3. Inicia ngrok na porta 80 ───────────────────────────────────────────────
if (-not (Get-Process -Name "ngrok" -ErrorAction SilentlyContinue)) {
    Start-Process $ngrokExe -ArgumentList "http 80 --host-header=solucoes-reformas.test" -WindowStyle Minimized
    Start-Sleep -Seconds 3
}

# ── 4. Busca URL pública do ngrok via API local ───────────────────────────────
$ngrokUrl = $null
for ($i = 0; $i -lt 15; $i++) {
    try {
        $resp  = Invoke-RestMethod -Uri "http://127.0.0.1:4040/api/tunnels" -ErrorAction Stop
        $https = $resp.tunnels | Where-Object { $_.proto -eq "https" } | Select-Object -First 1
        if ($https) { $ngrokUrl = $https.public_url; break }
    } catch {}
    Start-Sleep -Seconds 2
}

if (-not $ngrokUrl) {
    [System.Windows.Forms.MessageBox]::Show(
        "ngrok nao retornou URL.`nVerifique se o authtoken esta configurado: ngrok config add-authtoken SEU_TOKEN",
        "Aviso", "OK", "Warning")
    exit
}

# ── 5. Copia URL e abre no navegador ─────────────────────────────────────────
[System.Windows.Forms.Clipboard]::SetText($ngrokUrl)
Start-Process $ngrokUrl

# Notificacao no canto da tela
$icon = New-Object System.Windows.Forms.NotifyIcon
$icon.Icon    = [System.Drawing.SystemIcons]::Information
$icon.Visible = $true
$icon.ShowBalloonTip(5000, "Site no ar!", "URL copiada:`n$ngrokUrl", [System.Windows.Forms.ToolTipIcon]::Info)
Start-Sleep -Seconds 6
$icon.Dispose()
