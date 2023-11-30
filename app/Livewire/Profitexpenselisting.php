<?php

namespace App\Livewire;
use App\Models\ProfitAndExpense;
use Livewire\Component;

class Profitexpenselisting extends Component
{
public $profit;
    public function mount()
    {
        $this->profit = ProfitAndExpense::all();
    }
    public function create()
    {
        return redirect()->to(route('createprofitexpense'));
    }
    public function read($id)
    {
        return redirect()->to(route('readprofitexpense',['id' ,$id]) );
    }
    public function update($id)
    {
        return redirect()->to(route('updateprofitexpense',['id' ,$id]) );
    }
    public function delete($id)
    {
        $product = ProfitAndExpense::find($id)->delete();
        session()->flash('delete', 'Successfully, data deleted.');
        $this->mount();
        return redirect()->to(route('profitexpenselisting'));
    }
    public function render()
    {
        return view('livewire.profitexpenselisting');
    }
}
