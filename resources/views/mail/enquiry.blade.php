<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title></title>
   <meta name="description" content="">
</head>
<body>
    <h1>New Enquiry Form: </h1>
    <table>
        <tr>
            <th style="text-align:left">Name :</th>
            <td>{{ $mailData['name'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Email:</th>
            <td>{{ $mailData['email'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Country:</th>
            <td>{{ $mailData['country'] }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Phone no. :</th>
            <td>{{ $mailData['phone']}}</td>
        </tr>
        <tr>
            <th style="text-align:left">Course :</th>
            <td>{{ $mailData['course']}}</td>
        </tr>
        <tr>
            <th style="text-align:left">Gender :</th>
            <td>{{ $mailData['gender']}}</td>
        </tr>
        <tr>
            <th style="text-align:left">Room :</th>
            <td>{{ $mailData['room']}}</td>
        </tr>
        <tr>
            <th style="text-align:left">Message :</th>
            <td>{{ $mailData['message']}}</td>
        </tr>
    </table>
</body>
</html>