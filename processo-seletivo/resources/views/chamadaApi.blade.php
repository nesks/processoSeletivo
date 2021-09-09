@extends('principal')

@section('conteudo')


<div class="card card2 col-8 ">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Simbolo</th>
      <th scope="col">Nome da Companhia</th>
      <th scope="col">Último Preço</th>
      <th scope="col">Última Atualização</th>
      <th scope="col">Preço em tempo Real</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$symbol}}</td>
      <td>{{$companyName}}</td>
      <td>{{$latestPrice}}</td>
      <td>{{$latestTime}}</td>
      <td>{{$iexRealtimePrice}}</td>
    </tr>

  </tbody>
</table>
 </div>

@endsection
