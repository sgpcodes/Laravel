<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Listar categorias
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Formulário de criação
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Salvar nova categoria
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable'
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')
                         ->with('success', 'Categoria criada com sucesso!');
    }

    /**
     * Formulário de edição
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Atualizar categoria
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable'
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('categories.index')
                         ->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Excluir categoria
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success', 'Categoria excluída com sucesso!');
    }
}
