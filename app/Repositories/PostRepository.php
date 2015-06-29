<?php

    namespace App\Repositories;

    use Illuminate\Support\Facades\Crypt;

    use App\Post;

    class PostRepository {

        public function __construct( Post $post ) {
            $this->post = $post;
        }

        public function id() {
            return Crypt::encrypt( $this->post->id );
        }

        public function getByEncryptedId( $encryptedId ) {

            $decrypted_id = Crypt::decrypt( $encryptedId );
            $this->post = Post::find( $decrypted_id );

        }

    }