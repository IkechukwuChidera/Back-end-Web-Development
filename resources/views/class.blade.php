<table>
  <tbody>

    @foreach($all as $alls)
    <tr>{{$loop->index+1}}.  </tr>
    <tr>This is...{{$alls}}</br></tr>
    @endforeach
  </tbody>
</table>
