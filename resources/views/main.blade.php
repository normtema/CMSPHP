<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>

    <div class="page-path">name of this page:  {{$page->path}} </div>

        <div class="page-name-surname">my name: {{$page->name}} <br> my surname:  {{$page->surname}}</div>

        <div class="page-path">{{$page->maincontent}} </div>

        <div class="page-path">Date of creating this page: {{$page->dateofcreating}} </div>

        <div class="page-path">Date of last changing this page: {{$page->dateofchanging}} </div>


</body>
</html>
