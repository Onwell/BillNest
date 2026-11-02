
        </main>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sbOverlay');
    const burger = document.getElementById('burger');

    function openSidebar() { sidebar.classList.add('open'); overlay.classList.add('show'); }
    function closeSidebar() { sidebar.classList.remove('open'); overlay.classList.remove('show'); }

    burger.addEventListener('click', () => sidebar.classList.contains('open') ? closeSidebar() : openSidebar());
    overlay.addEventListener('click', closeSidebar);

    document.querySelectorAll('.chips').forEach(group => {
        const chips = group.querySelectorAll('.chip');
        chips.forEach(c => c.addEventListener('click', () => {
            chips.forEach(x => x.classList.remove('active'));
            c.classList.add('active');
        }));
    });

    document.querySelectorAll('.bar').forEach(bar => {
        const h = bar.style.height;
        bar.style.height = '0%';
        requestAnimationFrame(() => setTimeout(() => { bar.style.height = h; }, 60));
    });

    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeSidebar(); });

    const search = document.querySelector('.search input');
    if (search) search.addEventListener('keydown', e => {
        if (e.key === 'Enter') { e.preventDefault(); alert(`Search demo: "${search.value}"`); }
    });
});
</script>

</body>
</html>
