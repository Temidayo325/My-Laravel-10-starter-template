/** @type {import('tailwindcss').Config} */
export default {
  purge: false,
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './resources/**/*.css',
  ],
  theme: {
  	listStyleType: {
  		none: 'none',
      	disc: 'disc',
        decimal: 'decimal',
        square: 'square',
        roman: 'upper-roman',
    },
    extend: {
    	backgroundImage: {
	        'line-pattern': "linear-gradient(#d1d5db 1px, transparent 0px)",
	      }
    },
  },
  plugins: [],
}

