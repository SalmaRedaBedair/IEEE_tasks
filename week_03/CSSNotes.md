# CSS
- background_attachment: use it to define how the image will be attached in the page
  - scroll: when scroll it scroll as text with its size
  - fixed: its place will be fixed with its size
- back ground size
  - cover: it wil cover the page with full size as size of the page(may strach)
  - size: appear with its size
  - contain: it will appear in full page put when you try to minimize it, it will minimize by the ratio of its dimintions(not stratch)
- overflow: 
  - visible,hidden,scroll,auto;
  - i can manage overflow in X only or Y only
- text-transform: 
  - transform text to be capital or small
  - cpaitalize: make only first char capital
  - uppercase: make all chars capital
  - lowercase: make all small
- white-space: nowrap: to not start new line and make all text in only one line
- text-overflow: ellipsis; put 3 dots to justify that text is hidden
- border-color: inherit; i say to it inherit border-color from parent
- float:
  - i use it to make elements float in one direction ex(float: left;)
  - i must clear float properity to not affect other elements so i should use class claer as that 
- ```html
  <div class="clear"></div>
    ```
- ```css
    .clear{
      clear: boths;
    }
    ```
- calc: i use it to calculate widths and any thing for me in accurate way
- opacity: take values (0.0 : 1.0) to definy opacity of element
- position 
  - relative: element positioned relative to its normal position
              - parent must take that properity so that its childs positioned with respect to it
  - absolute: take position relative to body
  - fixed 
  - sticky: scroll till reach specific position will be fixed  
  - i have problem with that [link](https://www.w3schools.com/css/css_positioning.asp)
```css
.checked:hover + label{
color: red; 
}
/*
بقول ليه لما تقف على ال check box خلي ال label اللي جمبه يبقى أحمر

*/
```
- we have pesudo class like hover called empty, we use it to put our style for our elements
- First-letter, first-line: read about it we can add our style using css
```css
p::first-letter{

}
```
- before, after
- transition: انتقال العنصر من حالة إلى أخرى
  - transition-duration: manage time to translate element from one state to another, to make it more smooth
  - transition-delay
  - transition-properity
  - transition-timing-function
- ``media queries``
  - [link](https://elzero.org/css-media-queries-and-responsive-design-practice/)
- spaces between elements: to put it use justify content
- to put element in center
```css
.center-flex {
  display: flex;
  justify-content: center;
  align-items: center;
}
```
- initial: This value sets the property to its initial value, which is the value that the property would have if no other styles were applied to it. For example, the initial value of the font-size property is medium.

- inherit: This value sets the property to the computed value of its parent element. For example, if you set the color property to inherit on a child element, it will inherit the color value from its parent element.

- unset: This value sets the property to its inherited value if it has one, or its initial value if it doesn't. It essentially acts as a combination of inherit and initial.

- revert: This value was introduced in CSS Cascading and Inheritance Level 4, and it sets the property to its inherited value, if it has one, or its user-agent stylesheet's value, if it has one, or its initial value otherwise. It essentially acts as a way to undo any previous styling for a property and return it to its default value.

- all: This value is used with the unset and revert keywords, and it applies those values to all properties, not just the one you're setting.