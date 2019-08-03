###
#
# @Name : CaptchaSolver/solver.py
# @Version : 1.0
# @Programmer : Max
# @Date : 2019-08-03
# @Released under : https://github.com/BaseMax/CaptchaSolver/blob/master/LICENSE
# @Repository : https://github.com/BaseMax/CaptchaSolver
#
###
# import ipdb

# ipdb.set_trace()
# text = pytesseract.image_to_string(Image.open("1.jpg"))
# print(text)

import pytesseract
from PIL import Image

# for i in range(964, 1001):
for i in range(1, 1001):
	text = pytesseract.image_to_string(Image.open("captcha/"+str(i) + ".jpg"), lang='eng', config='--psm 10 --oem 3 -c tessedit_char_whitelist=0123456789abcdefg')
	print("| ![captcha](captcha/"+str(i)+".jpg) | "+ text + " |")
