<template>
	<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a class="navbar-item" href="/">
				devCamo
			</a>
			<button class="button navbar-burger is-dark">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<div class="navbar-menu">

				<div class="navbar-start">
					<a class="navbar-item">
						<span><i class="fa fa-home" aria-hidden="true"></i> Home</span>
					</a>
					<a class="navbar-item">
						<span><i class="fa fa-book" aria-hidden="true"></i> Blog</span>
					</a>
					<a class="navbar-item">
						Portfolio
					</a>
					<a class="navbar-item">
						About Me
					</a>
					<a class="navbar-item">
						Contact Me
					</a>
				</div>
					
			</div>
		</div>
	</nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
