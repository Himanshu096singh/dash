<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title></title>
   <meta name="description" content="">
</head>
<body>
    <table>
        <tr>
            <th style="text-align:left">Issue :</th>
            <td>{{ $mailData['issue'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Device :</th>
            <td>{{ $mailData['device'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Software :</th>
            <td>{{ $mailData['software'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Email :</th>
            <td>{{ $mailData['email'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Mobile :</th>
            <td>{{ $mailData['countrycode'].' '.$mailData['mobile'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">IP Address :</th>
            <td>{{ Request::ip() }}</td>
        </tr>
    </table>
</body>
</html>