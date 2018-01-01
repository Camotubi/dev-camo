<template>
	<div class="container">
		<div class="blog" v-for="blog in blogs">
			<a :href="blog.link">{{blog.title}}</a>
			<p>{{blog.description.substring(0,maxDescriptSize)}}<span v-show="blog.description.length > maxDescriptSize">...</span></p>
		</div>
	</div>
</template>

<script>
    export default {
	    props: {
		    maxDescriptSize:{
		    default:50,

		    },

	    },
	    data: () => {
		    return {
			    blogs: [
				    {
					    title:"Blog1",
					    link:"/blog/1",
					    description:"Lorem ipsum dolor hola",
				    },
				    {
					    title:"Blog2",
					    link:"/blog/2",
					    description:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at turpis iaculis, pulvinar neque nec, porttitor sem. Aliquam in lacus eget purus tempor placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam non justo nec elit suscipit consequat sit amet sit amet magna. Nullam convallis dignissim augue. Donec ornare odio magna, sed auctor metus consequat nec. Sed luctus, nunc sed dignissim iaculis, augue turpis pulvinar neque, at finibus erat dui eget quam. Aliquam consequat convallis consequat. Nulla id nibh dictum, eleifend sem eget, porta lorem. Phasellus malesuada malesuada nunc, nec ullamcorper nulla vehicula a. Duis eleifend posuere nisi. Aliquam a ullamcorper ante, sit amet pharetra tellus. Aenean sit amet accumsan arcu.",
				    },
				    {
					    title:"Blog3",
					    link:"/blog/3",
					    description:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at turpis iaculis, pulvinar neque nec, porttitor sem. Aliquam in lacus eget purus tempor placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam non justo nec elit suscipit consequat sit amet sit amet magna. Nullam convallis dignissim augue. Donec ornare odio magna, sed auctor metus consequat nec. Sed luctus, nunc sed dignissim iaculis, augue turpis pulvinar neque, at finibus erat dui eget quam. Aliquam consequat convallis consequat. Nulla id nibh dictum, eleifend sem eget, porta lorem. Phasellus malesuada malesuada nunc, nec ullamcorper nulla vehicula a. Duis eleifend posuere nisi. Aliquam a ullamcorper ante, sit amet pharetra tellus. Aenean sit amet accumsan arcu.",
				    },
				    {
					    title:"Blog4",
					    link:"/blog/4",
					    description:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at turpis iaculis, pulvinar neque nec, porttitor sem. Aliquam in lacus eget purus tempor placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam non justo nec elit suscipit consequat sit amet sit amet magna. Nullam convallis dignissim augue. Donec ornare odio magna, sed auctor metus consequat nec. Sed luctus, nunc sed dignissim iaculis, augue turpis pulvinar neque, at finibus erat dui eget quam. Aliquam consequat convallis consequat. Nulla id nibh dictum, eleifend sem eget, porta lorem. Phasellus malesuada malesuada nunc, nec ullamcorper nulla vehicula a. Duis eleifend posuere nisi. Aliquam a ullamcorper ante, sit amet pharetra tellus. Aenean sit amet accumsan arcu.",
				    },
			    ],
		    }
	    },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
