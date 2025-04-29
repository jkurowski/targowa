<?php

namespace App\Http\Controllers\Admin\Developro\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// CMS
use App\Repositories\InvestmentSectionRepository as Repository;
use App\Http\Requests\InvestSectionFormRequest as FormRequest;
use App\Services\InvestmentSectionService as Service;
use App\Models\InvestmentSections as Model;
use App\Models\Investment;

class IndexController extends Controller
{
    private Repository $repository;
    private Service $service;

    public function __construct(Repository $repository, Service $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(Investment $investment)
    {
        return view('admin.developro.investment_section.index', [
            'list' => $this->repository->allSortBy('sort', 'ASC'),
            'investment' => $investment
        ]);
    }

    public function create(Investment $investment)
    {
        return view('admin.developro.investment_section.form', [
            'cardTitle' => 'Dodaj wpis',
            'investment' => $investment,
            'backButton' => route('admin.developro.investment.section.index', $investment)
        ])->with('entry', Model::make());
    }

    public function store(FormRequest $request, Investment $investment)
    {
        $entry = $this->repository->create($request->validated());

        if ($request->hasFile('file')) {
            $this->service->upload($request->title, $request->file('file'), $entry);
        }

        return redirect(route('admin.developro.investment.section.index', $investment))->with('success', 'Nowy wpis dodany');
    }

    public function edit(Investment $investment, Model $section)
    {
        return view('admin.developro.investment_section.form', [
            'entry' => $section,
            'investment' => $investment,
            'cardTitle' => 'Edytuj wpis',
            'backButton' => route('admin.developro.investment.section.index', $investment)
        ]);
    }

    public function update(FormRequest $request, Investment $investment, Model $section)
    {
        $this->repository->update($request->validated(), $section);

        if ($request->hasFile('file')) {
            $this->service->upload($request->title, $request->file('file'), $section, true);
        }

        return redirect(route('admin.developro.investment.section.index', $investment))->with('success', 'Wpis zaktualizowany');
    }

    public function destroy(int $id)
    {
        $this->repository->delete($id);
        return response()->json('Deleted');
    }
}
