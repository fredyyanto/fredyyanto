module.exports = function(grunt){
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	
	grunt.initConfig({
		sass:{
			dist:{
				options: {
					style: 'expanded'
				},
				files:{
					'public/css/main.css':'public/sass/main.scss'
				}
			}
		},
		watch:{
			sass:{
				files: ['public/sass/**/*.scss'],
				tasks: ['sass'],
				options: {
					livereload: true,
				}
			}
		}
	});

	grunt.registerTask('default', ['watch']);
};