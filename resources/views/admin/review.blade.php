@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Kullanıcı Yorumları</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
								<tr>
									<th>
										Kullanıcı
									</th>
									<th>
										Tedavi
									</th>
									<th>
										Tarih/Saat
									</th>
                                    <th>
                                        Yıldız
                                    </th>
									<th>
										Durum
									</th>
									<th class="text-right">
										İşlem
									</th>
								</tr>
							</thead>
							<tbody>
                            @foreach ($review as $v)
                                <tr>
                                    <td>
                                        {{$v->user->name." ".$v->user->surname}}
                                    </td>
                                    <td>
                                        {{$v->tedavi->title}}
                                    </td>
                                    <td>
                                        {{$v->created_at}}
                                    </td>
                                    <td>
                                        {{$v->rate}}
                                    </td>
                                    <td>
                                        @if ($v->status == 1) Onaylandı  @else Onay Bekleniyor @endif
                                    </td>
                                    <td class="text-right">

                                        <a href="javascript:;" onclick="myPopup('{{Route("admin_review_edit",$v->id)}}', '',750,550);" data-toggle="tooltip" class="btn btn-warning btn-icon btn-sm "  title="Detaylar">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{Route("admin_review_delete",$v->id)}}" data-toggle="tooltip" class="btn btn-danger btn-icon btn-sm "  title="Kaldır">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    function myPopup(myURL, title, myWidth, myHeight)
    {
        var left = (screen.width - myWidth) / 2;
        var top = (screen.height - myHeight) / 4;
        var myWindow = window.open(myURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + myWidth + ', height=' + myHeight + ', top=' + top + ', left=' + left);
    }
</script>

@stop
