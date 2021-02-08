<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Board Game</title>
	<link rel="stylesheet" href="light_game_default.css">
	<style>
		/* 전체 보드게임판을 돌리는 애니메이션 */
		@keyframes starting {
			from {
				transform: rotateX(0deg) rotateZ(0deg);
			}
			to {
				transform: rotateX(60deg) rotateZ(240deg);
			}
		}

		/* 캐릭터가 통통 튀는 애니메이션 */
		@keyframes jump {
			from {
				transform: translateZ(30px) rotateX(-90deg) scaleY(0.7);
				/* scaleY를 0.7로 지정해서 통통 뛸 때  */
			}
			to {
				transform: translateZ(60px) rotateX(-90deg);
			}
		}
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			perspective: 1000px;/* body 전체를 3d 판으로 만든다 */
			color: black;
			background: #00498c;
		}
		.game {
			display: grid;
			grid-template-rows: repeat(6, 11vmin); 
			/* vmin은 브라우저 width와 height 중 작은 수치를 잡아낸다. 
			웹 브라우저의 경우 높이가 더 작으니까 높이의 11%
			vmax는 둘 중 더큰 것*/
 			grid-template-columns: repeat(6, 11vmin);
			gap: 1vw;
			transform: rotateX(0deg) rotateZ(0deg);
			transform-style: preserve-3d;
			animation: starting 2s 0.5s forwards;/*  */
		}
		.tile {
			/* overflow: hidden; */
			/* overflow: hidden이 되어있으면 3D 효과 안됨 */
			position: relative;
			border: 3px solid black;
			background: white;
			font-size: 2rem;
			transform-style: preserve-3d;
			display: table-cell; 
			vertical-align: middle;
		}
		.tile label {
			display: flex;
			align-items: center;
			justify-content: center;
			width: 100%;
			height: 100%;
			background: #fff;
			transform-style: preserve-3d;
			cursor: pointer;
		}
		.tile label:hover {
			color: white;
			background: dodgerblue;
		}
		.tile input {
			position: absolute;
			opacity: 0; /* radio input의 opacity를 0으로 조절해서 안 보이게 만듦  */
		}
		.tile input:checked + label {
			color: white;
			background: crimson;
		}
		
		.tile input:checked + label:before {
			content: '';
			position: absolute;
			display: block;
			width: 100px;
			height: 100px;
			background: url('../img/bear.png') no-repeat center;
			background-size: contain;
			border-radius: 50%;
			animation: jump 0.22s infinite alternate;
		}
		.tile:nth-child(1) { grid-row: 1; grid-column: 1; transform: rotate(135deg); border-radius: 50%; font-size: 25px; }
		.tile:nth-child(2) { grid-row: 1; transform: rotate(180deg); } /* 사람의 시선을 기준으로 어떻게 보일지를 판단해서 각도를 돌림 */
		.tile:nth-child(3) { grid-row: 1; transform: rotate(180deg); }
		.tile:nth-child(4) { grid-row: 1; transform: rotate(180deg); }
		.tile:nth-child(5) { grid-row: 1; transform: rotate(180deg); }
		.tile:nth-child(6) { grid-row: 1; transform: rotate(225deg); border-radius: 50%; }
		.tile:nth-child(7) { grid-row: 2; grid-column: 6; transform: rotate(270deg); }
		.tile:nth-child(8) { grid-row: 3; grid-column: 6; transform: rotate(270deg); }
		.tile:nth-child(9) { grid-row: 4; grid-column: 6; transform: rotate(270deg); }
		.tile:nth-child(10) { grid-row: 5; grid-column: 6; transform: rotate(270deg); }
		.tile:nth-child(11) { grid-row: 6; grid-column: 6; transform: rotate(315deg); border-radius: 50%; }
		.tile:nth-child(12) { grid-row: 6; grid-column: 5; }
		.tile:nth-child(13) { grid-row: 6; grid-column: 4; }
		.tile:nth-child(14) { grid-row: 6; grid-column: 3; }
		.tile:nth-child(15) { grid-row: 6; grid-column: 2; }
		.tile:nth-child(16) { grid-row: 6; grid-column: 1; transform: rotate(45deg); border-radius: 50%; }
		.tile:nth-child(17) { grid-row: 5; transform: rotate(90deg); }
		.tile:nth-child(18) { grid-row: 4; transform: rotate(90deg); }
		.tile:nth-child(19) { grid-row: 3; transform: rotate(90deg); font-size: 25px;}
		.tile:nth-child(20) { grid-row: 2; transform: rotate(90deg); }
		.tile:nth-child(1) label,
		.tile:nth-child(6) label,
		.tile:nth-child(11) label,

		.tile:nth-child(16) label {
			border-radius: 50%;
		}
		.link {
			display: block;
			text-decoration: none;
			background: #000000 center;
			color: #000000;
			align-self: center;
		}

		

	
	</style>
</head>
<body>
	<div class="game">
		<div class="tile">
			<input type="radio" name="tile" id="tile1">
			<label for="tile1">START</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile2">
			<label for="tile2">BTC</label>
		</div>

		
		<div class="tile">
			<a class=link href="javascript:;" ondblclick="location.href='https://blog.naver.com/gksqlc5421/222220468283';">
			<input type="radio" name="tile" id="tile3">			
			<label for="tile3">DOT</label>
			</a>
		</div>

		<div class="tile">
			<input type="radio" name="tile" id="tile4">
			<label for="tile4">EOS</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile5">
			<label for="tile5">ETH</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile6">
			<label for="tile6">XRP</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile7">
			<label for="tile7">LUN</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile8">
			<label for="tile8">KLA</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile9">
			<label for="tile9">ADA</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile10">
			<label for="tile10">LTC</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile11">
			<label for="tile11">IBP</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile12">
			<label for="tile12">BMP</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile13">
			<label for="tile13">TRX</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile14">
			<label for="tile14">XTZ</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile15">
			<label for="tile15">TEN</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile16">
			<label for="tile16">BSV</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile17">
			<label for="tile17">ETC</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile18">
			<label for="tile18">IOTA</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile19">
			<label for="tile19">QTUM</label>
		</div>
		<div class="tile">
			<input type="radio" name="tile" id="tile20">
			<label for="tile20">NEO</label>
		</div>
	</div>
</body>
</html>