<div>
    <table class="table">
        <thead>
          <tr>

            <th scope="col">Post Name</th>
            <th scope="col">Message</th>
            <th scope="col">Comment ID</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )
          <tr>
            <td>
                {{ $post->title }}
                {{ $post->message }}
                <td>
                    @foreach ($post->comments as $comment )
                    {{ $comment->message }}
                    {{ $comment->post_id }}
                    @endforeach
                </td>
            </td>
        </tr>
            @endforeach


        </tbody>
      </table
</div>
