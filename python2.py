symbols = (u"абвгдђежзијклљмнњопрстћуфхцчџшАБВГДЂЕЖЗИЈКЛЉМНЊОПРСТЋУФХЦЧЏШ",
           u"abvgdđežzijkllmnnoprstćufhcčdšABVGDĐEŽZIJKLLMNNOPRSTĆUFHCČDŠ")

tr = dict( [ (ord(a), ord(b)) for (a, b) in zip(*symbols) ] )

text = raw.input()
print text.translate(tr)
