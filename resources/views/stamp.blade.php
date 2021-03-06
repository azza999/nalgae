@extends('layouts.layout')

@section('css')
	
@endsection

@section('content')

<section id="stamp">
		<div class="section-title pt-3 mb-3">
			<h2>스탬프 투어란?</h2>
		</div>
		<div class="container px-5 mb-5">
			<p class="text-center px-1">학생과 학부모(친구 or 지인)가 <span class="text-danger">2인 1조로</span>함께 부스 체험을 하여 스탬프를 모으는 행사</p>
			<p class="text-center px-1">총 10개의 스탬프 투어 부스가 운영되며<br>각 부스별 미션 성공시 해당 부스의<br><span class="text-danger">스탬프를 획득!!!</span></p>
			<p class="text-center px-1"><span class="text-primary">10개의 스탬프</span>를 모아 통제본부(안내)로<br>가져오시면 추첨을 통하여<br><span class="text-primary">다양한 상품들을 GET!</span></p>
		</div>
		<div class="section-title mb-3">
			<h2>스탬프 투어 부스</h2>
		</div>
		<div class="container px-5 mb-5">
			<div class="row">
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c16.jpg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">기타연주부</h5>
							<p class="card-text">두명이 같이 c, d, e, f 코드를 치게 되면 스탬프 획득!</p>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c13.jpg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">축구부</h5>
							<p class="card-text">두명이 연속으로 골을 넣었을 경우 스템프 획득! (한명이라도 실패하면 다시 처음부터 도전)</p>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c10.jpg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">탁구부</h5>
							<p class="card-text">탁구부 학생과 번갈아가며 승부를 하고, 11점 내기를 하는동안 각각 2점씩 내면 스템프 획득! </p>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c17.jpeg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">풋살부</h5>
							<p class="card-text">과녁판에 교대로 3번 공을 차서 15점 이상 점수를 내면 스템프 획득!</p>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c17.jpg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">배드민턴부</h5>
							<p class="card-text">네트 점수판을 기준으로 두명의 도전자의 합산 점수가 7점 이상일 경우 스템프 획득!</p>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c4.jpg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">모형항공기부</h5>
							<p class="card-text">조종복을 입고 함께 사진을 찍어 보여주면 스템프 획득!</p>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c7.jpg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">족구부</h5>
							<p class="card-text">각각 트래핑을 실시하고, 두명의 트래핑 개수가 합쳐 10개 이상시 스템프 획득!</p>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c18.jpg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">배구부</h5>
							<p class="card-text">한명은 토스로 바구니에 공을 넣고, 한명은 스파이크로 바구니에 공을 넣으면 스템프 획득!</p>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c19.jpg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">테니스부</h5>
							<p class="card-text">페트병 4개를 세워놓고 1인 각 3회의 공을 칠 수 있는 기회를 부여하고, 페트병을 2개 이상 넘어뜨리면 스템프 획득!</p>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<div class="card">
						<img src="/public/img/stamp/c1.jpg" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">체력단련부</h5>
							<p class="card-text">철봉 오래 매달리기를 2명이서 합산한 시간이 30초가 넘을 경우 스템프 획득!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('js')

@endsection