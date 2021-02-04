<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Community</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR|Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/light_community.css">
	<style>
		html {
			font-size: 87.5%; /* 14px */
			font-family: Roboto, 'Noto Sans KR', sans-serif;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility !important; /* 
			optimizeLegibility 브라우저는 렌더링 속도와 기하학적 정밀도에 대한 가독성을 강조 
			!important; "다른 것보다 가장 최우선으로 적용해라"*/
		}
		body {
			background: lightgray;
		}
		img {
			max-width: 100%;
			height: auto;
		}
		/* 
		grid-container class가진 애가 전체 grid container 
		*/
		.grid-container {
			display: grid;
			grid-template-columns: repeat(4, 1fr); /* 리핏함수로 1fr 4개 배치 */ 
			grid-gap: 1rem;
			max-width: 1200px;
			margin: 0 auto;
		}
		.page-header {
			grid-column: 1/5; /* 헤더를 1~5줄 꽉차게 만듦 */
		}
		.page-footer {
			grid-column: 1/5; /* 푸터도 1~5 차게만듦 */
			padding: 1rem 0 3rem;
			font-size: 0.8rem;
		}
		.site-title {
			font-size: 10rem;
			font-family: 'Roboto Condensed';
		}
		.cate-sect {
			background: white;
		}
		.cate-name {
			padding: 1rem;
			font-weight: bold;
			color: white;
		}
		.cate-blockchain .cate-name { background: crimson; } /* 각 카테고리에는 고유한 색을 띠로 배치 */
		.cate-coin .cate-name { background: limegreen; }
		.cate-mining .cate-name { background: salmon; }
		.cate-games .cate-name { background: steelblue; }
		.cate-sect-cont {
			padding: 1rem;
		}
		.cate-sect-title {
			padding: 1rem;
		}
		input[name='sort-control'] {
			position: absolute;
			left: -1000rem;
		}
		.sort-label {
			padding: 1rem;
			cursor: pointer;
		}
		:checked + .sort-label {
			color: white;
			background: black;
		}
		#radio-sort-category:checked ~ .cate-blockchain { /* radio-sort-category가 카테고리 아이디인데 category체크 되면 변하게 함*/
			grid-row: 3/4; /* 3번째 ~ 4번째 줄 사이니까 박스 기준 첫번째 줄에 blockchain을 배치하겠다는 것 */
		}
		#radio-sort-category:checked ~ .cate-coin {
			grid-row: 4/5;
		}
		#radio-sort-category:checked ~ .cate-mining {
			grid-row: 5/6;
		}
		#radio-sort-category:checked ~ .cate-games {
			grid-row: 6/7;
		}
	</style>
</head>
<body>
	<article class="grid-container">
		<!-- 디폴트 & 카테고리 -->
		<input type="radio" name="sort-control" value="default" id="radio-sort-default">
		<!-- radio로 둘 디폴트와 카테고리 중 선택할 수 있게 함 -->
		<label class="sort-label" for="radio-sort-default">Default</label>
		<input type="radio" name="sort-control" value="category" id="radio-sort-category">
		<label class="sort-label" for="radio-sort-category">Category</label>

		<!-- 헤더 -->
		<header class="page-header">
			<h1 class="site-title">8ver Community</h1>
		</header>

		<section class="cate-sect cate-blockchain">
			<header class="cate-sect-header">
				<div class="cate-name">Blockchain</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-coin">
			<header class="cate-sect-header">
				<div class="cate-name">Coin</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-mining">
			<header class="cate-sect-header">
				<div class="cate-name">Mining</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-games">
			<header class="cate-sect-header">
				<div class="cate-name">Games</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-blockchain">
			<header class="cate-sect-header">
				<div class="cate-name">Blockchain</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-coin">
			<header class="cate-sect-header">
				<div class="cate-name">Coin</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-mining">
			<header class="cate-sect-header">
				<div class="cate-name">Mining</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-games">
			<header class="cate-sect-header">
				<div class="cate-name">Games</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>	<section class="cate-sect cate-blockchain">
			<header class="cate-sect-header">
				<div class="cate-name">Blockchain</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-coin">
			<header class="cate-sect-header">
				<div class="cate-name">Coin</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-mining">
			<header class="cate-sect-header">
				<div class="cate-name">Mining</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-games">
			<header class="cate-sect-header">
				<div class="cate-name">Games</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>	<section class="cate-sect cate-blockchain">
			<header class="cate-sect-header">
				<div class="cate-name">Blockchain</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-coin">
			<header class="cate-sect-header">
				<div class="cate-name">Coin</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-mining">
			<header class="cate-sect-header">
				<div class="cate-name">Mining</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>

		<section class="cate-sect cate-games">
			<header class="cate-sect-header">
				<div class="cate-name">Games</div>
				<h2 class="cate-sect-title">Lorem, ipsum.</h2>
			</header>
			<p class="cate-sect-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa quaerat quisquam magni aperiam minima quam, dicta sequi. Vel, consectetur totam.</p>
		</section>
		</section>

		<footer class="page-footer">
			Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, deserunt.
		</footer>
	</article>
</body>
</html>