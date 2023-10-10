<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title></title>
   <meta name="description" content="">
</head>
<body>
    <h1>New Contact Form: </h1>
    <table>
        <tr>
            <th style="text-align:left">Name :</th>
            <td>{{ $mailData['name'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Email :</th>
            <td>{{ $mailData['email'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Country :</th>
            <td>{{ $mailData['country_selector_code'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Phone Number :</th>
            <td>{{ $mailData['phone'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Subject :</th>
            <td>{{ $mailData['subject'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Message</th>
            <td>{{ $mailData['message'] }}</td>
        </tr>
    </table>
</body>
</html>