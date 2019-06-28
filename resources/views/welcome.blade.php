<!DOCTYPE html>
<html>
<head>
    <title>Phong JR</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="{{ route('post_image') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="file" name="image">
        <input type="submit" value="Click now">
    </form>
</body>
</html>