from pynput.keyboard import Key, Controller
#from pynput.mouse import Button, Controller
import time
#keyboard = Controller()

#to add time delay 


#left mouse click

keyboard = Controller()
time.sleep(3)

# Set pointer position

#mouse.position = (1126, 25)

# Press and release
#mouse.press(Button.left)
#mouse.release(Button.left)
#print("done")


#action1 - MOVE RIGHT
keyboard.press(Key.right)
keyboard.release(Key.right)

#action2 - JUMP
keyboard.press(Key.space)
keyboard.release(Key.space)