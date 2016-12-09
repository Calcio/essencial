<?php
namespace App\Http\Controllers;

use App\Http\Requests;
//use App\Repositories\Contracts\ProdutoRepositoryInterface;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;

class ProdutosController extends Controller
{
    //private $produtoRepository;

    // public function __construct(ProdutoRepositoryInterface $produtoRepository)
    // {
    //     $this->produtoRepository = $produtoRepository;
    // }
    //
    public function index()
    {
        $produtos = Produto::all();
        //$produtos = $this->produtoRepository->getAll();

        //return view('produtos.index', ['produtos' => $produtos]);
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    //public function store(Request $request)
    public function store(ProdutoRequest $request)
    {
        $input = $request->all();
        Produto::create($input);

        return redirect()->route('produtos');
    }

    public function destroy($id)
    {
        Produto::find($id)->delete();
        return redirect()->route('produtos');
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(ProdutoRequest $request ,$id)
    {
        $produto = Produto::find($id)->update($request->all());
        return redirect()->route('produtos');
    }


    public function view($id)
    {
        $produto = Produto::find($id);
        return view('produtos.view', compact('produto'));
    }
}
