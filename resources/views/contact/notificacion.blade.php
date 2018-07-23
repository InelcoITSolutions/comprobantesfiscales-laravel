<!DOCTYPE html>
<html>

<head>
    <title>Envió de mensaje desde ComprobantesFiscales.org</title>
</head>

<body>
    <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
        <tr style="height: 32px;">
            <th align="right" style="width:150px; padding-right:5px;">Nombre:</th>
            <td align="left" style="padding-left:5px; line-height: 20px;">{{ $nombre }}</td>
        </tr>
        <tr style="height: 32px;">
            <th align="right" style="width:150px; padding-right:5px;">Apellido:</th>
            <td align="left" style="padding-left:5px; line-height: 20px;">{{ $apellido }}</td>
        </tr>
        <tr style="height: 32px;">
            <th align="right" style="width:150px; padding-right:5px;">Teléfono:</th>
            <td align="left" style="padding-left:5px; line-height: 20px;">{{ $telefono }}</td>
        </tr>
        <tr style="height: 32px;">
            <th align="right" style="width:150px; padding-right:5px;">Extensión:</th>
            <td align="left" style="padding-left:5px; line-height: 20px;">{{ $extension }}</td>
        </tr>
        <tr style="height: 32px;">
            <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
            <td align="left" style="padding-left:5px; line-height: 20px;">{{ $email }}</td>
        </tr>
        <tr style="height: 32px;">
            <th align="right" style="width:150px; padding-right:5px;">Asunto:</th>
            <td align="left" style="padding-left:5px; line-height: 20px;">{{ $asunto }}</td>
        </tr>
        <tr style="height: 32px;">
            <th align="right" style="width:150px; padding-right:5px;">Mensaje:</th>
            <td align="left" style="padding-left:5px; line-height: 20px;">{{ $mensaje }}</td>
        </tr>
    </table>
</body>

</html>