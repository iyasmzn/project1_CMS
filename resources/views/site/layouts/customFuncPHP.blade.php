@php
function short_char($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
@endphp