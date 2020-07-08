function myFunction() {
			document.getElementById("motsao").onclick = function(){
				document.getElementById("star").value = '1';
				document.getElementById("test").innerHTML = "Bạn đã đánh giá sản phẩm là 1 sao";
				var a = document.getElementById("motsao"); 
				a.classList.add("duy");					
			}
			document.getElementById("haisao").onclick = function(){
				document.getElementById("star").value = '2';
				document.getElementById("test").innerHTML = "Bạn đã đánh giá sản phẩm là 2 sao";
				var a = document.getElementById("motsao"); 
				a.classList.add("duy");
				var b = document.getElementById("haisao"); 
				b.classList.add("duy");
				document.getElementById('motsao').style.pointerEvents = 'none';
			}
			document.getElementById("basao").onclick = function(){
				document.getElementById("star").value = '3';
				document.getElementById("test").innerHTML = "Bạn đã đánh giá sản phẩm là 3 sao";
				var a = document.getElementById("motsao"); 
				a.classList.add("duy");
				var b = document.getElementById("haisao"); 
				b.classList.add("duy");
				var c = document.getElementById("basao"); 
				c.classList.add("duy");
				document.getElementById('motsao').style.pointerEvents = 'none';
				document.getElementById('haisao').style.pointerEvents = 'none';
			}
			document.getElementById("bonsao").onclick = function(){
				document.getElementById("star").value = '4';
				document.getElementById("test").innerHTML = "Bạn đã đánh giá sản phẩm là 4 sao";
				var a = document.getElementById("motsao"); 
				a.classList.add("duy");
				var b = document.getElementById("haisao"); 
				b.classList.add("duy");
				var c = document.getElementById("basao"); 
				c.classList.add("duy");
				var d = document.getElementById("bonsao"); 
				d.classList.add("duy");
				document.getElementById('motsao').style.pointerEvents = 'none';
				document.getElementById('basao').style.pointerEvents = 'none';
				document.getElementById('haisao').style.pointerEvents = 'none';
			}
			document.getElementById("namsao").onclick = function(){
				document.getElementById("star").value = '5';
				document.getElementById("test").innerHTML = "Bạn đã đánh giá sản phẩm là 5 sao";
				var a = document.getElementById("motsao"); 
				a.classList.add("duy");
				var b = document.getElementById("haisao"); 
				b.classList.add("duy");
				var c = document.getElementById("basao"); 
				c.classList.add("duy");
				var d = document.getElementById("bonsao"); 
				d.classList.add("duy");
				var e = document.getElementById("namsao"); 
				e.classList.add("duy");
				document.getElementById('motsao').style.pointerEvents = 'none';
				document.getElementById('bonsao').style.pointerEvents = 'none';
				document.getElementById('basao').style.pointerEvents = 'none';
				document.getElementById('haisao').style.pointerEvents = 'none';
			}	

		}