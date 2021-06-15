<?php

namespace App\Http\Livewire;

use App\Models\CommentModel;
use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{

    public $newComment, $comments;

    public function addComment()
    {
        if(empty($this->newComment)) return;

        array_unshift($this->comments, [
            'body' => $this->newComment,
            'user_id' => 1
        ]);
        $this->newComment = '';
    }

    public function mount()
    {
        $initialComment = CommentModel::all();
        $this->comments = $initialComment;
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
