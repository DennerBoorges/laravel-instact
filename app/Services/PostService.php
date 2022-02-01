<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store(array $input, UploadedFile $photo)
    {
        DB::beginTransaction();
        try {
            $path = $photo->store('public/images');
            $url = Storage::url($path);

            $post = Post::create([
                'image' => $url,
                'description' => $input['description'],
                'user_id' => $input['user_id']
           ]);
        } catch (\Throwable $th) {
            DB::rollback();
            logger()->error($th);
            return [
                'sucess' => false,
                'massage' => 'Erro ao gravar post'
            ];
        }
    }
}

