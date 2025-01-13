import Component from "flarum/common/Component";
import icon from "flarum/common/helpers/icon";


export default class Stars extends Component {
  value;
  onchange;
  view() {
    let stars = [1,2,3,4,5].map(rating => {
      let cls = (this.attrs.value >= rating) ? 'fas' : 'far';
      let onchange = this.attrs.onchange;
      return icon(
        cls + ' fa-star Button-icon',
        { onclick() { onchange(rating) }}
      );
    });
    return m('.user_stars', stars);
  }
}
