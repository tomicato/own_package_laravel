<?php

echo '<h3 style="text-align: center; margin: 50px 0;color: crimson;text-transform:uppercase;text-decoration:underline;">It`s Posts Page!</h3>';
?>
@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach
