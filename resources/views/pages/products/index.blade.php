@extends('layouts.default')
{{-- namespace App; --}}

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-tittle">Daftar Barang</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                {{-- @forelse ($items as $item) --}}

                                <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>

                                        {{-- <th>#</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th> --}}

                                    </tr>
                                </thead>
                            {{-- </table>
                        </div> --}}
                                <tbody>
                                    @forelse ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->quantity }}</td>
                                       
                                        {{-- <td>{{ $item->Action }}</td>

                                        {{-- <td>1</td>
                                        <td>Nama</td>
                                        <td>Tipe</td>
                                        <td>0</td>
                                        <td>0</td> --}}
                                        
                                        
                                        <td>
                                            {{-- <!-- <a href="{{ route('products.gallery', $item->id) }}" class="btn btn-info btn-sm"> --> --}}
                                            <a href="#" class="btn btn-info btn-sm">
                                                <i class="fa fa-picture-o"></i>
                                            </a>

                                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                                

                                            
                                                 {{-- <!-- <form action="{{ route('products.gallery') }}" method="post" class="d-inline"> --> --}}
{{-- 
                                             <a href="#" class="btn btn-primary btn-sm">     --}}
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            {{-- <form action="#" method="post" class="d-inline">
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i> --}} 

                                            <form action="{{ route('products.destroy', $item->id) }}" 
                                                method="post" 
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sn">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            
                                        </td>
                                    </tr>

                              
                                 {{-- @endforeach --}}
                                 @empty
                                     
                                 <tr>
                                    
                                    <td colspan="6" class="text-center p-5">
                                        Data tidak tersedia
                                    </td>

                                 </tr>    
                                 
                                 @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection