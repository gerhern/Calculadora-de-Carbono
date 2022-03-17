module.exports = {
  purge: [
    './resources/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily:{
      'montserrat': ['montserrat, sans-serif']
    },
    extend: {
      colors:{
        'feather': '#77c9d4',
        'marine' : '#57bc90',
        'forest' : '#015249',
        'sleek'  : '#a5a5af',
        
        'primary-Color': '#235B4E',
        'primary-var': '#5A844E',
        'secondary-color' : '#9F2241',
        'secondary-var' : '#D62853'
      },
    },
    scale:{
      '200':'2'
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
