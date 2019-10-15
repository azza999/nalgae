@extends('layouts.layout')

@section('title','퍼레이드 위치지정')

@section('content')
<form id="jd_form" action="/insert_infos" onsubmit="makeupData(event); return false;" method="post">
	<section class="container insert" id="insert">
		<div class="card mt-5 mb-5">
			<div class="card-body">
				<div class="section-title">
					<h2>퍼레이드 위치 지정</h2>
				</div>
				<p class="text-center text-danger mb-2 mt-3">학생 이름은 "기수/이름" 으로 정확히 입력해 주세요! (ex: 49/김도현 )</p>
				<p class="text-center text-danger">5열이 아닐시 1열부터 좌측으로 채워주세요 (관악부 4열 설정시 5열을 비우면 됩니다.)</p>
				<p class="text-center text-danger">지휘자와 기수는 0오에 채워주세요</p>
				<div class="form-group">
					@csrf
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">제대 번호</span>
						</div>
						<select name="num" id="num" class="form-control">
							<option value="0">관악 제대</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
						</select>
					</div>
					<div class="form-group mt-5">
						<label for="cap">제대 지휘자</label>
						<input type="text" class="form-control" id="cap">
					</div>
					<div class="form-group mt-1">
						<label for="flag">제대 기수</label>
						<input type="text" class="form-control" id="flag">
					</div>
					<div class="jd table-responsive">
						<table>
							<thead>
								<tr>
									<th></th>
									<th>5열</th>
									<th>4열</th>
									<th>3열</th>
									<th>2열</th>
									<th>1열</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>0오</td>
									<td></td>
									<td></td>
									<td></td>
									<td><input class="form-control cell-input" placeholder="기수" type="text" data-row="1" data-col="2"></td>
									<td><input class="form-control cell-input" placeholder="지휘자" type="text" data-row="1" data-col="1"></td>
								</tr>
								<tr>
									<td>1오</td>
									<td><input class="form-control cell-input" type="text" data-row="1" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="1" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="1" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="1" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="1" data-col="1"></td>
								</tr>
								<tr>
									<td>2오</td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="1"></td>
								</tr>
								<tr>
									<td>2오</td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="2" data-col="1"></td>
								</tr>
								<tr>
									<td>3오</td>
									<td><input class="form-control cell-input" type="text" data-row="3" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="3" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="3" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="3" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="3" data-col="1"></td>
								</tr>
								<tr>
									<td>4오</td>
									<td><input class="form-control cell-input" type="text" data-row="4" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="4" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="4" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="4" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="4" data-col="1"></td>
								</tr>
								<tr>
									<td>5오</td>
									<td><input class="form-control cell-input" type="text" data-row="5" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="5" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="5" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="5" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="5" data-col="1"></td>
								</tr>
								<tr>
									<td>6오</td>
									<td><input class="form-control cell-input" type="text" data-row="6" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="6" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="6" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="6" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="6" data-col="1"></td>
								</tr>
								<tr>
									<td>7오</td>
									<td><input class="form-control cell-input" type="text" data-row="7" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="7" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="7" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="7" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="7" data-col="1"></td>
								</tr>
								<tr>
									<td>8오</td>
									<td><input class="form-control cell-input" type="text" data-row="8" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="8" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="8" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="8" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="8" data-col="1"></td>
								</tr>
								<tr>
									<td>9오</td>
									<td><input class="form-control cell-input" type="text" data-row="9" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="9" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="9" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="9" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="9" data-col="1"></td>
								</tr>
								<tr>
									<td>10오</td>
									<td><input class="form-control cell-input" type="text" data-row="10" data-col="5"></td>
									<td><input class="form-control cell-input" type="text" data-row="10" data-col="4"></td>
									<td><input class="form-control cell-input" type="text" data-row="10" data-col="3"></td>
									<td><input class="form-control cell-input" type="text" data-row="10" data-col="2"></td>
									<td><input class="form-control cell-input" type="text" data-row="10" data-col="1"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="card-footer text-right ">
				<button class="btn btn-danger">전체삭제</button>
				<button class="btn btn-primary">등록하기</button>
			</div>
		</div>
	</section>
</form>
<form action="/insert_fixed" id="fixed-form" class="container mb-5" method="post" onsubmit="return submitFixed(event)">
	<div class="card">
		<div class="card-body">
			<div class="section-title">
				<h2>특수학생 위치지정</h2>
			</div>
			<div class="container insert_fixed">
				@csrf
				<div class="form-group">
					<label for="special-name">이름</label>
					<input type="name" id="special-name" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="special-role">직책</label>
					<select name="role" class="form-control" id="special-role">
						<option value="0">전체 기수</option>
						<option value="1">총학생회 회장</option>
						<option value="2">총학생회 계획부장</option>
						<option value="3">총학생회 총무부장</option>
						<option value="4">총학생회 학습부장</option>
						<option value="5">총학생회 문화부장</option>
						<option value="6">총학생회 봉사부장</option>
					</select>
				</div>
			</div>
		</div>
		<div class="card-footer text-right">
			<button class="btn btn-primary">등록하기</button>
		</div>
	</div>
</form>
@endsection

@section('js')
	<script>
	
		$.ajaxSetup({
			headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
    	});

		function makeupData(e) {
			e.preventDefault();

			let $tgt = $('#jd_form');

			let jdNum = $('#num').val();

			let arr = [[],[],[],[],[],[],[],[],[],[],[]];

			$('.cell-input').each(function(i,ele) {
				let student = getStudentInfo($(ele).val());
				console.log({
					jid: jdNum,
					cn: student.cn,
					name: student.name,
					col: $(ele).data('col'),
					row: $(ele).data('row'),
					role: null,
					type: 'normal'
				})
				arr[$(ele).data('row')][$(ele).data('col')] = {
					jid: jdNum,
					cn: student.cn,
					name: student.name,
					col: $(ele).data('col'),
					row: $(ele).data('row'),
					role: null,
					type: 'normal'
				}
			})

			$.ajax({

				type:'POST',

			    url:'/insert_infos',

			    data:{arr: arr},

			    success:function(data){

			    	console.log(arr);
			    	console.log(data);

				}

			});

			return false;
		}

		function submitFixed(e) {
			e.preventDefault();

			let $tgt = $('#fixed-form')

			let info = getStudentInfo($('#special-name').val())

			let role = $('#special-role').val()

			$.ajax({

				type:'POST',

			    url:'/insert_fixed',

			    data:{
			    	student: {
			    		name: info.name,
			    		cn: info.cn,
			    		col: null,
			    		row: null,
			    		role: role,
			    		type: 'fixed',
			    	}
				},

			    success:function(data){
			    	console.log({
			    		name: info.name,
			    		cn: info.cn,
			    		col: null,
			    		row: null,
			    		role: role,
			    		type: 'fixed',
			    	});
			    	console.log(data);

				}

			});

			return false;
		}

		function getStudentInfo(str) {

			if(str.match(/^\d+\/.+$/i) === null && !(str.trim() == "")) {
				alert('올바르지 않은 입력이 있습니다!');
				return false;
			}

			let arr = str.split('/');

			return {
				cn: arr[0],
				name: arr[1]
			}
		}
	</script>
@endsection