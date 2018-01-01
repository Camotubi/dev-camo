<template>
	<div class="container">
		<transition-group name="list">
		<div class="blog" v-for="blog in blogs" :key="blog.id" v-if="blog.show" >
			<a href="#" @click="blog.show = !blog.show" v-show="blog.show">{{blog.title}}</a>
			<p>{{blog.description.substring(0,maxDescriptSize)}}<span v-show="blog.description.length > maxDescriptSize">...</span></p>
		</div>
		</transition-group>
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
					    show:true,
					    id:1,
				    },
				    {
					    title:"Blog2",
					    link:"/blog/2",
					    description:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at turpis iaculis, pulvinar neque nec, porttitor sem. Aliquam in lacus eget purus tempor placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam non justo nec elit suscipit consequat sit amet sit amet magna. Nullam convallis dignissim augue. Donec ornare odio magna, sed auctor metus consequat nec. Sed luctus, nunc sed dignissim iaculis, augue turpis pulvinar neque, at finibus erat dui eget quam. Aliquam consequat convallis consequat. Nulla id nibh dictum, eleifend sem eget, porta lorem. Phasellus malesuada malesuada nunc, nec ullamcorper nulla vehicula a. Duis eleifend posuere nisi. Aliquam a ullamcorper ante, sit amet pharetra tellus. Aenean sit amet accumsan arcu.",
					    show:true,
					    id:2,
				    },
				    {
					    title:"Blog3",
					    link:"/blog/3",
					    description:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at turpis iaculis, pulvinar neque nec, porttitor sem. Aliquam in lacus eget purus tempor placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam non justo nec elit suscipit consequat sit amet sit amet magna. Nullam convallis dignissim augue. Donec ornare odio magna, sed auctor metus consequat nec. Sed luctus, nunc sed dignissim iaculis, augue turpis pulvinar neque, at finibus erat dui eget quam. Aliquam consequat convallis consequat. Nulla id nibh dictum, eleifend sem eget, porta lorem. Phasellus malesuada malesuada nunc, nec ullamcorper nulla vehicula a. Duis eleifend posuere nisi. Aliquam a ullamcorper ante, sit amet pharetra tellus. Aenean sit amet accumsan arcu.",
					    show:true,
					    id:3,
				    },
				    {
					    title:"Blog4",
					    link:"/blog/4",
					    description:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at turpis iaculis, pulvinar neque nec, porttitor sem. Aliquam in lacus eget purus tempor placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam non justo nec elit suscipit consequat sit amet sit amet magna. Nullam convallis dignissim augue. Donec ornare odio magna, sed auctor metus consequat nec. Sed luctus, nunc sed dignissim iaculis, augue turpis pulvinar neque, at finibus erat dui eget quam. Aliquam consequat convallis consequat. Nulla id nibh dictum, eleifend sem eget, porta lorem. Phasellus malesuada malesuada nunc, nec ullamcorper nulla vehicula a. Duis eleifend posuere nisi. Aliquam a ullamcorper ante, sit amet pharetra tellus. Aenean sit amet accumsan arcu.",
					    show:true,
					    id:4,
				    },
			    ],
		    }
	    },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
.list-item {
  display: inline-block;
  margin-right: 10px;
}
.list-enter-active, .list-leave-active {
  transition: all 1s;
}
.list-enter, .list-leave-to /* .list-leave-active below version 2.1.8 */ {
  opacity: 0;
  transform: translateX(30px);
}
</style>
