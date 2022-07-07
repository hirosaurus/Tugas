# no 1A
# import re
#
# s = 'sadiwjklnksand sajdiowqdejpsoak umami@gmail.com. ' \
#     'osdkpoiqs sindaru@google.com you can let me go halah ' \
#     'YUD@gmail.com'
#
# a = re.findall(r'[\w.-]+@[\w.-]+',s)
# print(a)

# no 1B
# import re
#
# file = open(help(),"r",encoding="latin1")
# teks = file.read()
# file.close()
# p = r"dia\w+"
# string = re.findall(p,teks)
# print(string)

# no 2A
# class simpulpohonbiner(object):
#     def __init__(self,data):
#         self.data = data
#         self.kiri = None
#         self.kanan = None

# def preorder(subpohon):
#     print(subpohon.data)
#     preorder(subpohon.kiri)
#     preorder(subpohon.kanan)
#
# def inorder(subpohon):
#     inorder(subpohon.kiri)
#     print(subpohon.data)
#     inorder(subpohon.kanan)
#
# def postorder(subpohon):
#     postorder(subpohon.kiri)
#     postorder(subpohon.kanan)
#     print(subpohon.data)

# A = simpulpohonbiner("M")
# B = simpulpohonbiner("U")
# C = simpulpohonbiner("H")
# D = simpulpohonbiner("A")
# E = simpulpohonbiner("M")
# F = simpulpohonbiner("A")
# G = simpulpohonbiner("D")
#
# A.kiri = B ; A.kanan = C
# B.kiri = D ; B.kanan = E
# C.kiri = F ; C.kanan = G
#
# print(preorder(A))
#
# class simpul(object):
#     def __init__(self,data):
#         self.data = data
#         self.kiri = None
#         self.kanan = None
#
# def preorder(subpohon):
#     print(subpohon.data)
#     preorder(subpohon.kiri)
#     preorder(subpohon.kanan)
#
# def inorder(subpohon):
#     inorder(subpohon.kiri)
#     print(subpohon.data)
#     inorder(subpohon.kanan)
#
# def postorder(subpohon):
#     postorder(subpohon.kiri)
#     postorder(subpohon.kanan)
#     print(subpohon.data)
#
# A = simpul("L")
# B = simpul("2")
# C = simpul("0")
# D = simpul("0")
# E = simpul("2")
# F = simpul("0")
# G = simpul("0")
# H = simpul("1")
# I = simpul("0")
# J = simpul("0")
#
# A.kiri = B ; A.kanan = C
# B.kiri = D ; B.kanan = E
# C.kiri = F ; C.kanan = G
# D.kiri = H ; D.kanan = I
# E.kiri = J

# print(inorder(A))

#NO 3
# import time
# def jumlahkan_cara_1(n):
#     hasilnya = 0
#     for i in range(1, n+1):
#         hasilnya = hasilnya + i
#     return hasilnya
#
# for i in range(10):
#     awal = time.time()
#     h = jumlahkan_cara_1(1500000)
#     akhir = time.time()
#     print("Jumlah adalah %d, memerlukan %9.8f detik" % (h, akhir-awal))
