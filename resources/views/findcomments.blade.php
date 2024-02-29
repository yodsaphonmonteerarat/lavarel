<!DOCTYPE html>
<html lang=
"en">
<h3>
<p>Post_ID: {{$post->id }}</p>
<p>{{ $post->title }}</p>
</h3>
<body>
<p> <u>Comments </u></p>
@foreach ($comments as $comment)
<tr>
<td>{{ $comment->id }}</td>
<td>{{ $comment->comment }}</td>
</br>
</tr>
@endforeach
</body>
</html>