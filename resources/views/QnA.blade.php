@extends('layouts.layout')

@section('css')
	<link rel="stylesheet" href="/public/css/jquery-ui.css">
	<style>
		.content .question { font-size: 16px; padding: 15px 10px; margin-top: 10px; }
		.content .question { outline-color: var(--primary); }
		.content .answer { line-height: 1.7em; letter-spacing: 0.3px; }
	</style>
@endsection

@section('content')

<section id="stamp" class="container pt-5">
		<div class="section-title pt-3 mb-3">
			<h2>자주묻는 질문</h2>
		</div>
		<div class="content px-3 pb-5">
			<h3 class="question">부대는 언제부터 입장할 수 있나요?</h3>
			<div class="answer">1정문(문산방면)에서 08:00부터 입장이 가능합니다.<br>입장시 초청장 또는 밴드에 공지된 초청장 사진을 안내요원에게 보여주시기 바랍니다.</div>

			<h3 class="question">초청장을 분실했는데 부대 입장을 어떻게 하나요?</h3>
			<div class="answer">밴드에 공지한 초청장 사진을 통해 부대 입장이 가능합니다.</div>

			<h3 class="question">2정문(금산방면)으로 부대 입장이 가능한가요?</h3>
			<div class="answer">불가합니다. 2정문(금산방면)으로 오시면 1정문(문산방면)으로 회차하셔야 합니다. 1정문(문산방면)으로 오셔야 초청장 확인 후 입장이 가능합니다.</div>

			<h3 class="question">행사 중간에 학생을 데리고 학교 밖을 나갈 수 있나요?</h3>
			<div class="answer">행사 종료(16:00) 전 학생 외출은 불가합니다. 행사 종료 후 전 학생 특별외박이 시행됩니다.</div>

			<h3 class="question">행사 종료 후 전 학생이 무조건 외박을 나가야 하나요?</h3>
			<div class="answer">이번 외박은 자율외박과 별개로 특별외박으로 실시됩니다. 모든 학생이 외박을 나가야 합니다.</div>

			<h3 class="question">화장실은 어디에 있나요?</h3>
			<div class="answer">무용관, 문화관, 마이스터관, 지학관 내에 위치해 있습니다. 자세한 위치는 지도를 참고해주시기 바랍니다.</div>

			<h3 class="question">점심식사는 어떻게 하나요?</h3>
			<div class="answer">따로 점심식사가 제공되지 않으므로 도시작을 준비해주시기 바랍니다. 점심식사 시간은 행사 시작 후 자유롭게 실시하면 되겠습니다.</div>

			<h3 class="question">점심식사는 어디에서 먹나요?</h3>
			<div class="answer">학교 내 축제진행 장소 근처에서(천막 or 돗자리)에서 드실 수 있습니다. 돗자리를 준비해 오시기 바랍니다.</div>

			<h3 class="question">학교 내 먹거리를 파는 장소(매점 등)가 있나요?</h3>
			<div class="answer">행사장 내 항과고 카페를 운영하나, 식사류의 먹거리는 판매하지 않습니다. 점심식사를 위한 도시락을 준비하는 것을 추천합니다.</div>

			<h3 class="question">도시락을 준비하지 못했는데 음식 배달이 가능한가요?(치킨, 피자 등)</h3>
			<div class="answer">1정문으로 주문 후 수령이 가능합니다. 단, 도보로 학교 이탈이 불가하며 문화관 앞 셔틀버스를 이용하셔야 합니다. 셔틀버스 1대 운영으로 제한사항이 많아 도시락을 권장합니다.</div>

			<h3 class="question">음주나 흡연을 할 수 있는 장소가 있나요?</h3>
			<div class="answer">부대 전 지역은 음주나 흡연이 금지되어있습니다. 전자담배 (아이코스 등) 일체금지입니다.</div>

			<h3 class="question">갑자기 몸이 아프면 어떻게 하나요?</h3>
			<div class="answer">문화관 앞 통제본부에 상비약이 구비되어 있습니다. 응급환자나 비상시를 대비하여 구급차량대기중입니다.</div>

			<h3 class="question">부대 내 자유로운 사진촬영이 가능한가요?</h3>
			<div class="answer">부대 내 전 구역은 군사시설로 학교건물이 나오는 사진촬영은 금지되어있습니다. 학교건물이 나오지 않는 개인사진은 촬영이 가능합니다.</div>

			<h3 class="question">학교 내에서 드론과 같은 비행장비 운용이 가능한가요?</h3>
			<div class="answer">허가되지 않은 일체의 비행장비 운용 및 반입이 금지되어있습니다.</div>

			<h3 class="question">물건을 분실 또는 분실물을 습득했어요.</h3>
			<div class="answer">문화관 앞 통제본부에서 분실물 센터를 운영하고 있습니다.</div>

			<h3 class="question">행사 중간에 주차장 or 1정문에 가기 위하여 도보로 학교 이탈이 가능한가요?</h3>
			<div class="answer">도보로 교내지역 이탈은 불가합니다. 무용관 앞 셔틀버스를 이용하셔야 합니다</div>

		</div>
	</section>

@endsection

@section('js')
	<script src="/public/js/jquery-ui-1.11.4/jquery-ui.js"></script>

	<script>
		$('.content').accordion();
	</script>
@endsection