<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCategory extends Component
{
    use WithFileUploads;
    public $category_name = '';
    public $category_details;
    public $currentUrl;



    public function mount ($id)
    {
        $this->category_details = Category::find($id);
        $this->category_name = $this->category_details->name;

        // dd($this->product_details);
        $this->all_categories = Category::all();
    }

    public function update ()
    {
        //validation
        $this->validate([
            'category_name' => 'string|max:255',
        ]);

        $this->category_details->update([
            'name' => $this->category_name,
        ]);

        return redirect()->to('/manage/categories');
    }
    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode('/', $current_url);
        $this->currentUrl = ($explode_url[3] ?? '') . ' ' . ($explode_url[5] ?? '');

        return view('livewire.edit-category')->layout('admin-layout');
    }

}
