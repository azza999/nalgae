@extends('layouts.layout')

@section('title','퍼레이드 위치찾기')
@section('css')
<link rel="stylesheet" href="/public/css/jquery-toast.css">
@endsection

@section('content')
	<section id="parade">
		<div class="container">
			<div class="section-title">
				<h2>퍼레이드 위치찾기</h2>
			</div>
			<div class="form-group text-center col-10 offset-1 mb-5">
					<label for="search">학생 검색</label>
				<div class="input-group">
					<input type="text" id="search-input" class="form-control">
					<div class="input-group-append">
						<button id="search-btn" class="btn btn-dark">검색</button>
					</div>
				</div>
			</div>
			<div class="jds">
				<div class="jd d-flex justify-content-center align-items-stretch" id="ga">
					<div class="left-title">
						관악부<br>제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex justify-content-between">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch">
					<div class="left-title">
						총학생회<br>제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch" id="jd1">
					<div class="left-title" style="height: 500px;">
						1제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch" id="jd2">
					<div class="left-title" style="height: 500px;">
						2제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch" id="jd3">
					<div class="left-title" style="height: 400px;">
						3제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch" id="jd4">
					<div class="left-title" style="height: 450px;">
						4제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch" id="jd5">
					<div class="left-title" style="height: 400px;">
						5제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch" id="jd6">
					<div class="left-title" style="height: 100px;">
						6제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch" id="jd7">
					<div class="left-title" style="height: 500px;">
						7제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch" id="jd8">
					<div class="left-title" style="height: 500px">
						8제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('js')
<script src="/public/js/jquery-toast.js"></script>
<script>
	let ga = JSON.parse('{!! json_encode($ga) !!}');
	let $ga = $('#ga').children('.content');
	console.log(ga,$ga);
	ga.forEach(function (item) {
		$tgt = $ga.children('.jd-row').eq(item.row).children('.cell').eq(item.col);
		$tgt.attr('data-name',item.cn+item.name);
		$tgt.text(item.name)
	})
</script>
<script>
	let jds = JSON.parse('{!! json_encode($jds) !!}');
	console.log(jds);
	jds.forEach(function (jd,jdIdx) {
		let $jd = $('#jd'+(jdIdx+1)).children('.content');
		console.log($jd);
		jd.forEach(function (cell,cellIdx) {
			$tgt = $jd.children('.jd-row').eq(cell.row).children('.cell').eq(cell.col);
			$tgt.attr('data-name',cell.cn+cell.name);
			$tgt.text(cell.name)
		})
	})
</script>
<script>
	$('#search-btn').on('click',function(e){
		search();
	})
	$('#search-input').on('keydown',function(e){
		console.log(e.keyCode);
		if(e.keyCode === 13) {
			search();
		}
	})
	function search() {
		let name = $('#search-input').val();

		if (name.match(/^\d\d[가-힣a-cA-C]+$/) === null) {
			$.toast('일치하는 학생이 없습니다',{
				duration: 1000,
				stack: 1,
			})
		}

		let $tgt = $('.cell[data-name='+name+']');
		scroll({top: $tgt.offset().top - 200,  behavior: 'smooth'})
	}
</script>

@endsection