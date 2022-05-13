<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\UseVoucher;
use App\Models\Location;
use App\Models\Shop_Category;
use App\Models\Sub_Category;
use App\Models\Voucher;

class VoucherList extends Component
{
    public $selectCity;
    public $selectCategory;
    public $selectSubCategory;

    public function render()
    {
        $category=Shop_Category::all();
        $location=Location::all();
        $sub_category=Sub_Category::all();

        $vouchers=Voucher::with('shop')
        ->when($this->selectCity, function($query) {
            return $query->where('location', $this->selectCity);
        })
        ->when($this->selectCategory, function($query) {
            return $query->where('shop_category', $this->selectCategory);
        })
        ->when($this->selectSubCategory, function($query) {
            return $query->where('sub_category', $this->selectSubCategory);
        })
        ->get();
        
        return view('livewire.voucher-list',[
            'vouchers'=>$vouchers,
            'category'=>$category,
            'location'=>$location,
            'sub_category'=>$sub_category,
        ]);
    }
}
