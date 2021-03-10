import React, {useState, useContext} from "react";
import {AlertContext} from "../context/alert/alertContext";
import {FirebaseContext} from "../context/firebase/firebaseContext";

export const Form = () => {

    const [value, setValue] = useState('');
    const alert = useContext(AlertContext);
    const firebase = useContext(FirebaseContext);

    const submitHandler = event => {
        event.preventDefault();

        if (value.trim()) {
            firebase.addNote(value.trim());
            alert.show('Your note has been added.', 'success');
            setValue('');
        } else {
            alert.show('Enter note, please.');
        }
    };

    return (
      <form onSubmit={submitHandler}>
          <div className="form-group">
              <input type="text"
                     className="form-control"
                     placeholder={'Enter your note'}
                     value={value}
                     onChange={e => setValue(e.target.value)}
              />
          </div>
      </form>
      )
};