module.exports = {
  purge: [

    './resources/**/*.blade.php',

    './resources/**/*.js',

    './resources/**/*.vue',

  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors:{
        'feather': '#77c9d4',
        'marine' : '#57bc90',
        'forest' : '#015249',
        'sleek'  : '#a5a5af'   
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
