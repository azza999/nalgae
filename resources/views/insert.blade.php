@extends('layouts.layout')

@section('title','퍼레이드 위치지정')

@section('content')
<form action="/insert_infos" method="post">
	<section class="container insert" id="insert">
		<div class="card mt-5 mb-5">
			<div class="card-body">
				<div class="section-title">
					<h2>퍼레이드 위치 지정</h2>
				</div>
				<p class="text-center text-danger mb-2 mt-3">학생 이름은 "기수/이름" 으로 정확히 입력해 주세요! (ex: 49/김도현 )</p>
				<p class="text-center text-danger">5열이 아닐시 1열부터 좌측으로 채워주세요 (관악부 4열 설정시 5열을 비우면 됩니다.)</p>
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
									<td>1오</td>
									<td><input class="form-control" type="text" data-row="1" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="1" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="1" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="1" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="1" data-col="1"></td>
								</tr>
								<tr>
									<td>2오</td>
									<td><input class="form-control" type="text" data-row="2" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="2" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="2" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="2" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="2" data-col="1"></td>
								</tr>
								<tr>
									<td>2오</td>
									<td><input class="form-control" type="text" data-row="2" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="2" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="2" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="2" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="2" data-col="1"></td>
								</tr>
								<tr>
									<td>3오</td>
									<td><input class="form-control" type="text" data-row="3" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="3" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="3" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="3" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="3" data-col="1"></td>
								</tr>
								<tr>
									<td>4오</td>
									<td><input class="form-control" type="text" data-row="4" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="4" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="4" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="4" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="4" data-col="1"></td>
								</tr>
								<tr>
									<td>5오</td>
									<td><input class="form-control" type="text" data-row="5" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="5" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="5" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="5" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="5" data-col="1"></td>
								</tr>
								<tr>
									<td>6오</td>
									<td><input class="form-control" type="text" data-row="6" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="6" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="6" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="6" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="6" data-col="1"></td>
								</tr>
								<tr>
									<td>7오</td>
									<td><input class="form-control" type="text" data-row="7" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="7" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="7" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="7" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="7" data-col="1"></td>
								</tr>
								<tr>
									<td>8오</td>
									<td><input class="form-control" type="text" data-row="8" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="8" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="8" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="8" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="8" data-col="1"></td>
								</tr>
								<tr>
									<td>9오</td>
									<td><input class="form-control" type="text" data-row="9" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="9" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="9" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="9" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="9" data-col="1"></td>
								</tr>
								<tr>
									<td>10오</td>
									<td><input class="form-control" type="text" data-row="10" data-col="5"></td>
									<td><input class="form-control" type="text" data-row="10" data-col="4"></td>
									<td><input class="form-control" type="text" data-row="10" data-col="3"></td>
									<td><input class="form-control" type="text" data-row="10" data-col="2"></td>
									<td><input class="form-control" type="text" data-row="10" data-col="1"></td>
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
<form action="/insert_fixed" method="post">
	<div class="card">
		<div class="card-body">
			<div class="container insert_fixed">
				@csrf
				<div class="form-group">
					<label for="special-name"></label>
					<input type="text" id="special-name" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="special-role"></label>
					<input type="text" id="special-role" name="role" class="form-control">
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button class="btn btn-primary">등록하기</button>
		</div>
	</div>
</form>
@endsection