<header>
	<img src="assets/img/icone.png">
	<h1>CHÁ DE PANELA/COZINHA</h1>
	<h4>O QUE EU PRECISO PARA A CASA NOVA?</h4>
</header>

<section class="page-code">
	<form onsubmit="onSubmit(event)" class="content-area">
		<fieldset class='number-code'>
			<legend>CÓDIGO DO CHÁ</legend>
			<div>
				<input name='code' class='code-input' required/>
				<input name='code' class='code-input' required/>
				<input name='code' class='code-input' required/>
				<input name='code' class='code-input' required/>
				<input name='code' class='code-input' required/>
				<input name='code' class='code-input' required/>
			</div>
		</fieldset>
		<input type="submit" value="ACESSAR" class="buttom-send">
	</form>
</section>

<script>
	const inputElements = [...document.querySelectorAll('input.code-input')]

	inputElements.forEach((ele,index)=>{
	ele.addEventListener('keydown',(e)=>{
		// if the keycode is backspace & the current field is empty
		// focus the input before the current. Then the event happens
		// which will clear the "before" input box.
		if(e.keyCode === 8 && e.target.value==='') inputElements[Math.max(0,index-1)].focus()
	})
	ele.addEventListener('input',(e)=>{
		// take the first character of the input
		// this actually breaks if you input an emoji like 👨‍👩‍👧‍👦....
		// but I'm willing to overlook insane security code practices.
		const [first,...rest] = e.target.value
		e.target.value = first ?? '' // first will be undefined when backspace was entered, so set the input to ""
		const lastInputBox = index===inputElements.length-1
		const didInsertContent = first!==undefined
		if(didInsertContent && !lastInputBox) {
		// continue to input the rest of the string
		inputElements[index+1].focus()
		inputElements[index+1].value = rest.join('')
		inputElements[index+1].dispatchEvent(new Event('input'))
		}
	})
	})


	// mini example on how to pull the data on submit of the form
	function onSubmit(e){
	e.preventDefault()
	const code = inputElements.map(({value})=>value).join('')
	console.log(code)
	}
</script>