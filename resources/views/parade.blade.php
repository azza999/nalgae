@extends('layouts.layout')

@section('title','퍼레이드 위치찾기')
@section('css')
<link rel="stylesheet" href="/public/css/jquery-toast.css">

<style>
	.cell.active {
		-webkit-animation: highlight .5s infinite;
		-o-animation: highlight .5s infinite;
		animation: highlight .5s infinite;
	}

	@keyframes highlight {
		0% { background-color: #494949; }
		49.99% { background-color: #494949; }
		99.99% { background-color: #a9a9a9; }
		100% { background-color: #a9a9a9; }
	}
</style>
@endsection

@section('content')
	<section id="parade">
		<div class="container">
			<div class="section-title">
				<h2>퍼레이드 위치찾기</h2>
			</div>
			<div class="form-group text-center col-10 offset-1 mb-5">
				<label for="search" class="" style="font-size: 1.5em;">학생 검색</label>
				<p class="text-center text-dark mb-1">학생 기수+학생 이름으로 검색해 주세요 (동명 이인의 경우 A, B를 포함해 주세요)</p>
				<p class="text-center text-dark mb-1">ex) 49이상훈A</p>
				<div class="input-group">
					<input type="text" id="search-input" class="form-control">
					<div class="input-group-append">
						<button id="search-btn" class="btn btn-dark">검색</button>
					</div>
				</div>
			</div>
			<div class="jds">
				<div class="jd d-flex justify-content-center align-items-stretch" id="ga">
					<div class="left-title" style="height: 400px;">
						관악부<br>제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex flex-row-reverse">
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row jd-row-first d-flex justify-content-between flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch">
					<div class="left-title" style="height: 50px;">
						제대<br>기수
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex justify-content-center flex-row-reverse">
							<div class="cell" data-name="49권건우">권건우</div>
						</div>
					</div>
				</div>
				<div class="jd d-flex justify-content-center align-items-stretch">
					<div class="left-title" style="height: 100px; font-size: 16px;">
						총학생회<br>제대
					</div>
					<div class="content">
						<div class="jd-row jd-row-first d-flex justify-content-cneter flex-row-reverse">
							<div class="cell" data-name="49구민석">구민석</div>
						</div>
						<div class="jd-row jd-row-first d-flex justify-content-end flex-row-reverse">
							<div class="cell" data-name="49조옥제">조옥제</div>
							<div class="cell" data-name="49나휘민">나휘민</div>
							<div class="cell" data-name="49이채민">이채민</div>
							<div class="cell" data-name="49조빛찬">조빛찬</div>
							<div class="cell" data-name="49김승환">김승환</div>
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
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-start flex-row-reverse">
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
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-start flex-row-reverse">
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
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
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
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-start flex-row-reverse">
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
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
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
							<div class="cell" data-name="49홍정민">홍정민</div>
							<div class="cell" data-name="49정인배">정인배</div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell" data-name="49김남규">김남규</div>
							<div class="cell" data-name="49김동욱">김동욱</div>
							<div class="cell" data-name="49이준영">이준영</div>
							<div class="cell" data-name="51김건우">김건우</div>
							<div class="cell" data-name="51김교윤">김교윤</div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell" data-name="51박민준">박민준</div>
							<div class="cell" data-name="51김민규">김민규</div>
							<div class="cell" data-name="50은동현">은동현</div>
							<div class="cell" data-name="51김태환">김태환</div>
							<div class="cell" data-name="50이호연">이호연</div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell" data-name="50김재훈">김재훈</div>
							<div class="cell" data-name="50박희수">박희수</div>
							<div class="cell" data-name="51이승헌">이승헌</div>
							<div class="cell" data-name="50박재형">박재형</div>
							<div class="cell" data-name="50이재혁">이재혁</div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell" data-name="51정현우">정현우</div>
							<div class="cell" data-name="51이성우">이성우</div>
							<div class="cell" data-name="51박세찬">박세찬</div>
							<div class="cell" data-name="50김동진">김동진</div>
							<div class="cell" data-name="50이상민">이상민</div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell" data-name="50김민재">김민재</div>
							<div class="cell" data-name="51이승찬">이승찬</div>
							<div class="cell" data-name="51이진우">이진우</div>
							<div class="cell" data-name="51김현수">김현수</div>
							<div class="cell" data-name="51박주현">박주현</div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell" data-name="50박찬운">박찬운</div>
							<div class="cell" data-name="51김은우">김은우</div>
							<div class="cell" data-name="49안승현">안승현</div>
							<div class="cell" data-name="49김성준">김성준</div>
							<div class="cell" data-name="49이주승">이주승</div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell" data-name="50김필립">김필립</div>
							<div class="cell" data-name="50김유안">김유안</div>
							<div class="cell" data-name="50강현우">강현우</div>
							<div class="cell" data-name="50진시완">진시완</div>
							<div class="cell" data-name="51김무준">김무준</div>
						</div>
						<div class="jd-row d-flex justify-content-start flex-row-reverse">
							<div class="cell" data-name="49안은이">안은이</div>
							<div class="cell" data-name="50이묘진">이묘진</div>
							<div class="cell" data-name="50한지수">한지수</div>
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
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-start flex-row-reverse">
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
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
							<div class="cell"></div>
						</div>
						<div class="jd-row d-flex justify-content-end flex-row-reverse">
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
	ga.forEach(function (item) {
		$tgt = $ga.children('.jd-row').eq(item.row).children('.cell').eq(item.col);
		$tgt.attr('data-name',item.cn+item.name);
		$tgt.text(item.name)
	})
</script>
<script>
	let jds = JSON.parse('{!! json_encode($jds) !!}');
	jds.forEach(function (jd,jdIdx) {
		let $jd = $('#jd'+(jdIdx+1)).children('.content');
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
		if(e.keyCode === 13) {
			search();
		}
	})
	function search() {
		let name = $('#search-input').val();
		if (name.match(/^\d\d[가-힣a-cA-C]+$/) === null) {
			$.toast({
				text: '일치하는 학생이 없습니다',
				bgColor: '#f2dede',
				textColor: '#b94a48',
				hideAfter: 3000,
				loader: false,
				stack: 1,
			})
			return;
		}
		let $tgt = $('.cell[data-name='+name+']');
		if ($tgt.length === 0) {
			$.toast({
				text: '일치하는 학생이 없습니다',
				bgColor: '#f2dede',
				textColor: '#b94a48',
				hideAfter: 3000,
				loader: false,
				stack: 1,
			})
			return;
		}

		$('.active').removeClass('active');
		$tgt.addClass('active')

		scroll({top: $tgt.offset().top - 400,  behavior: 'smooth'})
	}
</script>

@endsection