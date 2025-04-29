@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card-head container-fluid">
            <div class="row">
                <div class="col-12 pl-0">
                    <h4 class="page-title"><i class="fe-home"></i><a href="{{route('admin.developro.investment.index')}}">Inwestycje</a><span class="d-inline-flex me-2 ms-2">/</span>{{$investment->name}}<span class="d-inline-flex me-2 ms-2">-</span>Sekcje tekstowe</h4>
                </div>
            </div>
        </div>
        @include('admin.developro.investment_shared.menu')
        <div class="card mt-3">
            <div class="card-body card-body-rem p-0">
                <div class="table-overflow">
                    <table class="table data-table mb-0 w-100">
                        <thead class="thead-default">
                        <tr>
                            <th>Tytuł</th>
                            <th>Sub-tytuł</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="content">
                        @foreach ($list as $item)
                            <tr id="recordsArray_{{ $item->id }}">
                                <td>{{ $item->modaltytul }}</td>
                                <td>{{ $item->modaleditor }}</td>
                                <td class="option-120">
                                    <div class="btn-group">
                                        <a href="{{route('admin.developro.investment.section.edit', [$investment, $item->id])}}" class="btn action-button me-1" data-bs-toggle="tooltip" data-placement="top" data-bs-title="Edytuj wpis"><i class="fe-edit"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group form-group-submit">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <a href="{{route('admin.developro.investment.section.create', $investment)}}" class="btn btn-primary">Dodaj wpis</a>
                </div>
            </div>
        </div>
    </div>
@endsection

