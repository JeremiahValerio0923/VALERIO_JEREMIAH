var camelCase = "TheQuickBrownFoxJumpsOverTheLazyDog";
var camel = camelCase.toUpperCase(); //function to convert all letters to uppercase
var tmp = camel[0]; 
for (i = 1; i < camelCase.length; i++){ //checks the length of string
   var hasnextcap = false;
   var hasprevcap = false;
   var charValue = camelCase.charCodeAt(i);

   if (charValue > 64 && charValue < 91){
      if (camelCase.length > i + 1){
         var next_charValue = camelCase.charCodeAt(i + 1);
         if (next_charValue > 64 && next_charValue < 91) //condition if there is a next capital letter
            hasnextcap = true;
      }
      if (i - 1 > -1){
         var prev_charValue =  camelCase.charCodeAt(i - 1);
         if (prev_charValue > 64 && prev_charValue < 91) //condition if there is a previous capital letter
            hasprevcap = true;
      }
      if (i < camelCase.length-1 && (!(hasnextcap && hasprevcap || hasprevcap) || (hasprevcap && !hasnextcap))) //checks for words, then adds space
         tmp += " ";
    }
   tmp += camelCase[i].toLowerCase(); //turns string into lower case
}
console.log(tmp); //displays the string on terminal