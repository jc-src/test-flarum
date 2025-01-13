import app from 'flarum/forum/app';
import UserCard from "flarum/forum/components/UserCard";
import {extend} from "flarum/common/extend";
import Stars from "./components/Stars";
import UserRating from "../common/models/UserRating";
// import UserRating from "../common/models/UserRating";

app.initializers.add('jcsrc/user-rating', () => {

  let submit = (rating: number) => {
    console.log('submit', rating);
    /*
    app.store
      .createRecord('UserRating')
      .save({rating: rating, userId: 2})
      .then((post) => {
        alert('done');
      })
     */
  }

  extend(UserCard.prototype, 'view', function() {
    // @ts-ignore
    this.rating = 2
  });

  extend(UserCard.prototype, 'infoItems', function (items) {
    items.add( 'rating', Stars.component({
        value: this.rating,
        onchange: (value: number) => {
          console.log('Value: ', value );
          submit(value);
          this.rating = value;
        }}),
      101);
  });


});
