symbols = (u"абвгдђежзијклљмнњопрстћуфхцчџшАБВГДЂЕЖЗИЈКЛЉМНЊОПРСТЋУФХЦЧЏШ",
           u"abvgdđežzijkllmnnoprstćufhcčdšABVGDĐEŽZIJKLLMNNOPRSTĆUFHCČDŠ")

tr = {ord(a):ord(b) for a, b in zip(*symbols)}

text = input()
print (text.translate(tr))
