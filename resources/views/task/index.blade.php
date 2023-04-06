<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('Task.create')}}" class="button"> Thêm Task</a><br>
                <table id="customers" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Tên</th>
                                        <th>Tên</th>
                                        <th>Trạng Thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($task as $key => $cate)
                                    <tr>

                                        <td>{{$key}}</td>
                                        <td>{{$cate ->name}}</td>
                                        <td>{{$cate ->des}}</td>

                                        
                                        <td>
                                            <div class="d-flex"> <a href="{{route('Task.show',$cate->id)}}" >
                                                    
                                                    <button type="submit" class="btn btn-danger btn-sm">Xem</button>
                                              ||
                                            </a>
                                            <a href="{{route('Task.edit',$cate->id)}}" >
                                                    
                                                        <button type="submit" class="btn btn-danger btn-sm">Sửa</button>
                                                  
                                                </a>   ||   
                                               
                                                    <form method="post" action="{{route('Task.destroy',$cate->id)}}">
                                                        @method('delete')
                                                        @csrf
                                                       
                                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                   
                                                      
                                                    </form>
                                              
                                            </div>
                                        
                                        </td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>


            </div>
        </div>
    </div>
</x-app-layout>
<style>
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td,
#customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
}

.button {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
</style>