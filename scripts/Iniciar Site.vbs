' Lança o IniciarSite.ps1 que está na mesma pasta que este arquivo
Dim shell, pastaAtual, ps1

Set shell    = CreateObject("WScript.Shell")
pastaAtual   = Left(WScript.ScriptFullName, InStrRev(WScript.ScriptFullName, "\"))
ps1          = pastaAtual & "IniciarSite.ps1"

shell.Run "powershell.exe -WindowStyle Hidden -ExecutionPolicy Bypass -File """ & ps1 & """", 0, False
